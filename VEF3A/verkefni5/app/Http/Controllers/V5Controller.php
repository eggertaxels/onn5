<?php
namespace App\Http\Controllers;

class V5Controller extends Controller
{
  public function index()
  {
    $persons = array(
      #Nafn, mynd, frekari upplýsingar, fæðingaár, land uppruna
      array(
        'The Weeknd',
        'https://media.gq.com/photos/586fbf1ab730b94511591fad/master/w_1600/the-weeknd-0217-GQ-FEWE04-01-3x2.jpg',
        'Abel Makkonen Tesfaye, known professionally as The Weeknd, is a Canadian singer, songwriter, and record producer. In late 2010, Tesfaye anonymously uploaded several songs to YouTube under the name "The Weeknd"',
        'February 16, 1990',
        'Canada'
      ),
      
      array(
        'Drake',
        'http://s3.amazonaws.com/factmag-images/wp-content/uploads/2017/02/drake-snl-bumper.jpg',
        'Aubrey Drake Graham is a Canadian rapper, singer, songwriter, record producer, actor, and entrepreneur. Drake initially gained recognition as an actor on the teen drama television series Degrassi: The Next Generation in the early 2000s.',
        'October 24, 1986',
        'Canada'
      )
    );
      
    return view('verk5/person.index', compact('persons'));
  }
  
  public function show($id)
  {
    
    $persons = array(
      #Nafn, mynd, frekari upplýsingar, fæðingaár, land uppruna
      array(
        'The Weeknd',
        'https://media.gq.com/photos/586fbf1ab730b94511591fad/master/w_1600/the-weeknd-0217-GQ-FEWE04-01-3x2.jpg',
        'Abel Makkonen Tesfaye, known professionally as The Weeknd, is a Canadian singer, songwriter, and record producer. In late 2010, Tesfaye anonymously uploaded several songs to YouTube under the name "The Weeknd"',
        'February 16, 1990',
        'Canada'
      ),
      
      array(
        'Drake',
        'http://s3.amazonaws.com/factmag-images/wp-content/uploads/2017/02/drake-snl-bumper.jpg',
        'Aubrey Drake Graham is a Canadian rapper, singer, songwriter, record producer, actor, and entrepreneur. Drake initially gained recognition as an actor on the teen drama television series Degrassi: The Next Generation in the early 2000s.',
        'October 24, 1986',
        'Canada'
      )
    );
   
    return view('verk5/person.show', compact('persons', 'id'));
  }
}