<?php
declare(strict_types=1);

class UsersController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $this->view->users = Users::find();
    }

    public function createAction()
    {
        if ($this->request->isPost()) {
            $user = new Users();
            $user->name = $this->request->getPost("name", "string");
            $user->email = $this->request->getPost("email", "email");

            if ($user->save()) {
                return $this->response->redirect("users");
            } else {
                foreach ($user->getMessages() as $message) {
                    echo $message, "<br>";
                }
            }
        }
    }

    public function deleteAction($id)
    {
        $user = Users::findFirst($id);
        if ($user) {
            $user->delete();
        }
        return $this->response->redirect("users");
    }
}

