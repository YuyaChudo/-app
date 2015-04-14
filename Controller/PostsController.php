<?php


App::uses('AppController', 'Controller');
class PostsController extends AppController {

	public $helpers = array('Html','Form');

	public function index(){
		$this->set('posts', $this->Post->find('all'));
		$this->set('title_for_layout', '日記アプリ');

	}

	public function view($id = null){
		$this->Post->id = $id;
		$this->set('post',$this->Post->read());
	}

	public function add(){
		if($this->request->is('post')){
			if($this->Post->save($this->request->data)){
				$this->Session->setFlash('Success!');
				$this->redirect(array('action'=>'index'));

			}else {
				$this->Session->setflash('failed!');
			}
		}
	}

	public function edit($id=null){
		$this->Post->id = $id;
		if($this->request->is('get')){
			$this->request->data = $this->Post->read();
		}else{
			if($this->Post->save($this->request->data)){
				$this->Session->setFlash('sucess!');
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash('failed!');
			}
		}
	}

	public function delete($id){
		if($this->request->is('get')){
			throw new MethodNotAllowedException();
		}
		if($this->Post->delete($id)){
			$this->Session->setFlash('Deleted!');
			$this->redirect(array('action'=>'index'));
		}
	}


}