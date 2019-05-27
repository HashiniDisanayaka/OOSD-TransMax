<?php
class Passenger extends Controller{
    
    protected function register(){
        //Redirect to Model
        $viewmodel = PassengerModel::getModelInstance();
        $this->returnView($viewmodel->register(),true);    
    }
    protected function signIn(){
        $viewmodel = PassengerModel::getModelInstance();
        $this->returnView($viewmodel->signIn(),true);
    }
    protected function dashboard(){
        $viewmodel = PassengerModel::getModelInstance();
        $this->returnView($viewmodel->dashboard(),false);
    }
    protected function balance(){
        $viewmodel = PassengerModel::getModelInstance();
        $this->returnView($viewmodel->balance(),false);
        new dashTopNav();
        new passengerSideNav();
        new balanceDiv($viewmodel->balanceRes);
    }
    protected function deposit(){
        $viewmodel = PassengerModel::getModelInstance();
        $this->returnView($viewmodel->deposit(),false);
        new dashTopNav();
        new passengerSideNav();
        new depositForm();
    }



    

}
?>