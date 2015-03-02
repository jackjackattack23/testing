<?php
/**
 * The MIT License (MIT)
 *
 * Webzash - Easy to use web based double entry accounting software
 *
 * Copyright (c) 2014 Prashant Shah <pshah.mumbai@gmail.com>
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

App::uses('WebzashAppController', 'Webzash.Controller');

/**
 * Webzash Plugin Queues Controller
 *
 * @package Webzash
 * @subpackage Webzash.controllers
 */ 
 
class QueuesController extends WebzashAppController {

	public $uses = array('Webzash.Entry', 'Webzash.Log', 'Webzash.Queue');

/**
 * index method
 *
 * @return void
 */
	public function index() {

		$this->set('title_for_layout', __d('webzash', 'View the Queue by Status Type'));

		$this->CustomPaginator->settings = array(
			'Queue' => array(
				'limit' => $this->Session->read('Wzsetting.row_count'),
				'order' => array('Queue.title' => 'asc'),
			)
		);

		/* Pass varaibles to view which are used in Helpers */
		$this->set('allQueues', $this->Queue->fetchAll());

		$this->set('queues', $this->CustomPaginator->paginate('Queue'));
		return;
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {

		$this->set('title_for_layout', __d('webzash', 'Add Queued Status'));

		/* On POST */
		if ($this->request->is('post')) {
			$this->Queue->create();
			if (!empty($this->request->data)) {
				/* Unset ID */
				unset($this->request->data['Queue']['id']);

				/* Save queued status */
				$ds = $this->Queue->getDataSource();
				$ds->begin();

				if ($this->Queue->save($this->request->data)) {
					$this->Log->add('Added Queued Status : ' . $this->request->data['Queue']['title'], 1);
					$ds->commit();
					$this->Session->setFlash(__d('webzash', 'Queued status "%s" created.', $this->request->data['Queue']['title']), 'success');
					return $this->redirect(array('plugin' => 'webzash', 'controller' => 'queues', 'action' => 'index'));
				} else {
					$ds->rollback();
					$this->Session->setFlash(__d('webzash', 'Failed to create queued status. Please, try again.'), 'danger');
					return;
				}
			} else {
				$this->Session->setFlash(__d('webzash', 'No data. Please, try again.'), 'danger');
				return;
			}
		}
	}


/**
 * edit method
 *
 * @throws NotFoundException
 * @throws ForbiddenException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {

		$this->set('title_for_layout', __d('webzash', 'Edit Queued Status'));

		/* Check for valid tag */
		if (empty($id)) {
			$this->Session->setFlash(__d('webzash', 'Queued status not specified.'), 'danger');
			return $this->redirect(array('plugin' => 'webzash', 'controller' => 'queues', 'action' => 'index'));
		}
		$queue = $this->Queue->findById($id);
		if (!$queue) {
			$this->Session->setFlash(__d('webzash', 'Queued status not found.'), 'danger');
			return $this->redirect(array('plugin' => 'webzash', 'controller' => 'queues', 'action' => 'index'));
		}

		/* on POST */
		if ($this->request->is('post') || $this->request->is('put')) {

			/* Check if acccount is locked */
			if (Configure::read('Account.locked') == 1) {
				$this->Session->setFlash(__d('webzash', 'Sorry, no changes are possible since the account is locked.'), 'danger');
				return $this->redirect(array('plugin' => 'webzash', 'controller' => 'queues', 'action' => 'index'));
			}

			/* Set queued status id */
			unset($this->request->data['Queue']['id']);
			$this->Queue->id = $id;

			/* Save queue status */
			$ds = $this->Queue->getDataSource();
			$ds->begin();

			if ($this->Queue->save($this->request->data)) {
				$this->Log->add('Edited Queued Status : ' . $this->request->data['Queue']['title'], 1);
				$ds->commit();
				$this->Session->setFlash(__d('webzash', 'Queued status "%s" updated.', $this->request->data['Queue']['title']), 'success');
				return $this->redirect(array('plugin' => 'webzash', 'controller' => 'queues', 'action' => 'index'));
			} else {
				$ds->rollback();
				$this->Session->setFlash(__d('webzash', 'Failed to update queued status. Please, try again.'), 'danger');
				return;
			}
		} else {
			$this->request->data = $queue;
			return;
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {

		/* GET access not allowed */
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}

		/* Check for valid queued status */
		if (empty($id)) {
			$this->Session->setFlash(__d('webzash', 'Queued status not specified.'), 'danger');
			return $this->redirect(array('plugin' => 'webzash', 'controller' => 'queues', 'action' => 'index'));
		}

		/* Check if queue exists */
		$queue = $this->Queue->findById($id);
		if (!$queue) {
			$this->Session->setFlash(__d('webzash', 'Queued status not found.'), 'danger');
			return $this->redirect(array('plugin' => 'webzash', 'controller' => 'queues', 'action' => 'index'));
		}

		/* Check if any entries using the queued status exists */
		$entries = $this->Entry->find('count', array('conditions' => array('Entry.queue_id' => $id)));
		if ($entries > 0) {
			$this->Session->setFlash(__d('webzash', 'Queued status cannot be deleted since one or more entries are still using it.'), 'danger');
			return $this->redirect(array('plugin' => 'webzash', 'controller' => 'queues', 'action' => 'index'));
		}

		/* Delete queued status */
		$ds = $this->Queue->getDataSource();
		$ds->begin();

		if ($this->Queue->delete($id)) {
			$this->Log->add('Deleted Queued Status : ' . $queue['Queue']['title'], 1);
			$ds->commit();
			$this->Session->setFlash(__d('webzash', 'Queued status "%s" deleted.', $queue['Queue']['title']), 'success');
		} else {
			$ds->rollback();
			$this->Session->setFlash(__d('webzash', 'Failed to delete queued status. Please, try again.'), 'danger');
		}

		return $this->redirect(array('plugin' => 'webzash', 'controller' => 'queues', 'action' => 'index'));
	}

	function beforeFilter() {
		parent::beforeFilter();

		/* Check if acccount is locked */
		if (Configure::read('Account.locked') == 1) {
			if ($this->action == 'add' || $this->action == 'delete') {
				$this->Session->setFlash(__d('webzash', 'Sorry, no changes are possible since the account is locked.'), 'danger');
				return $this->redirect(array('plugin' => 'webzash', 'controller' => 'queues', 'action' => 'index'));
			}
		}
	}

	/* Authorization check */
	public function isAuthorized($user) {
		if ($this->action === 'index') {
			return $this->Permission->is_allowed('view queue');
		}

		if ($this->action === 'add') {
			return $this->Permission->is_allowed('add queue');
		}

		if ($this->action === 'edit') {
			return $this->Permission->is_allowed('edit queue');
		}

		if ($this->action === 'delete') {
			return $this->Permission->is_allowed('delete queue');
		}

		return parent::isAuthorized($user);
	}
}
