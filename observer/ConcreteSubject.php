<?php 
class ConcreteSubject implements SubjectInterface {
    protected $observers = [];

    public function doTask()
    {
        // We pretend that we made something that others want to be aware of
        $this->notify();
    }
    public function addObserver(ObserverInterface $observer)
    {
        $this->observers[] = $observer;
    }

    public function removeObserver(ObserverInterface $observer)
    {
        // TODO: Implement removeObserver() method.
    }

    public function notify()
    {
        foreach ($this->observers as $observer)
        {
            $observer->update();
        }

    }

    public function getState()
    {
        return 'Hello observers';
    }
}