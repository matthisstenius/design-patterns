<?php 
class ConcreteObserver implements ObserverInterface {

    public function update(SubjectInterface $subject)
    {
        echo "I'm notified of " . $subject->getState();
    }
}