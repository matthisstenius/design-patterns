<?php

$subject = new ConcreteSubject();

$subject->addObserver(new ConcreteObserver);
$subject->addObserver(new ConcreteObserverB);

$subject->doTask();