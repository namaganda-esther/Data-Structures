<!-- 
    each node contains two elements. A data part that stores the value at that node and 
    next part that stores the link to the next node 
 -->
 <!-- The first node also known as HEAD is usually used to traverse through the linked list. 
 The last node (next part of the last node) points to NULL 
-->

<?php
//node structure
class Node {
  public $data;
  public $next;
}

class LinkedList {
  public $head;

  //constructor to create an empty LinkedList
  public function __construct(){
    $this->head = null;
  }
  
  //display the content of the list
  public function PrintList() {
    $temp = new Node();
    $temp = $this->head;
    if($temp != null) {
      echo "The list contains: ";
      while($temp != null) {
        echo $temp->data." ";
        $temp = $temp->next;
      }
      echo "\n";
    } else {
      echo "The list is empty.\n";
    }
  }   
};

// test the code  
//create an empty LinkedList
$MyList = new LinkedList();

//Add first node.
$first = new Node();
$first->data = 10;
$first->next = null;
//linking with head node
$MyList->head = $first;

//Add second node.
$second = new Node();
$second->data = 20;
$second->next = null;
//linking with first node
$first->next = $second;

//Add third node.
$third = new Node();
$third->data = 30;
$third->next = null;
//linking with second node
$second->next = $third;

//print the content of list
$MyList->PrintList();   
?>