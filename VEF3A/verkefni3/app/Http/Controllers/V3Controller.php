<?php
namespace App\Http\Controllers;

class V3Controller extends Controller
{
  public function index()
  {
    return view('verk3/books.index');
  }
  
  public function show($id)
  {
    
    $books = array(
      
      array("Lolita","Vladimir Nabokov","1989", "Awe and exhiliration--along with heartbreak and mordant wit--abound in Lolita, Nabokov's most famous and controversial novel, which tells the story of the aging Humbert Humbert's obsessive, devouring, and doomed passion for the nymphet Dolores Haze. Lolita is also the story of a hypercivilized European colliding with the cheerful barbarism of postwar America. Most of all, it is a meditation on love--love as outrage and hallucination, madness and transformation."),
      
      array("The Great Gatsby","F. Scott Fitzgerald","2004", "The Great Gatsby, F. Scott Fitzgerald's third book, stands as the supreme achievement of his career. This exemplary novel of the Jazz Age has been acclaimed by generations of readers. The story of the fabulously wealthy Jay Gatsby and his love for the beautiful Daisy Buchanan, of lavish parties on Long Island at a time when The New York Times noted gin was the national drink and sex the national obsession, it is an exquisitely crafted tale of America in the 1920s."),
      
      array("1984","George Orwell","1949", "Big Brother is watching you....
      
      1984 is the year in which it happens. The world is divided into three superstates. In Oceania, the Party's power is absolute. Every action, word, gesture and thought is monitored under the watchful eye of Big Brother and the Thought Police. In the Ministry of Truth, the Party's department for propaganda, Winston Smith's job is to edit the past. Over time, the impulse to escape the machine and live independently takes hold of him and he embarks on a secret and forbidden love affair. As he writes the words 'DOWN WITH BIG BROTHER', his personal rebellion begins....
      
      George Orwell's masterpiece is the definitive dystopian novel and one of the most influential works of the twentieth century.")
      
    );
   
    #$books = array("Bók 1", "Bók 2", "Bók 3");
    #$book = $books[$id-1];
    return view('verk3/books.show', compact('books', 'id'));
  }
}