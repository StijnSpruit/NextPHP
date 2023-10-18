<?php

namespace classes;
//autogenerated code 
interface Accept {
   public function accept(Visitor $visitor);
}

   interface Visitor { 
      function visitBinaryExpr($Binaryexpr);
      function visitGroupingExpr($Groupingexpr);
      function visitLiteralExpr($Literalexpr);
      function visitUnaryExpr($Unaryexpr);
   }
abstract class Expr {
}
   class Binary extends Expr {
       public Expr $left;
       public clsToken $operator;
       public Expr $right;
       public function __construct($left, $operator, $right) {
           $this->left= $left;
           $this->operator= $operator;
           $this->right= $right;
       }
       public function accept(Visitor $visitor) {
           return $visitor->visitBinaryExpr($this);
       }
   }

   class Grouping extends Expr {
       public Expr $expression;
       public function __construct($expression) {
           $this->expression= $expression;
       }
       public function accept(Visitor $visitor) {
           return $visitor->visitGroupingExpr($this);
       }
   }

   class Literal extends Expr {
       public Expr $Value;
       public function __construct($Value) {
           $this->Value = $Value;
       }
       public function accept(Visitor $visitor) {
           return $visitor->visitLiteralExpr($this);
       }
   }

   class Unary extends Expr {
       public clsToken $operator;
       public Expr $right;
       public function __construct($operator, $right) {
           $this->operator= $operator;
           $this->right= $right;
       }
       public function accept(Visitor $visitor) {
           return $visitor->visitUnaryExpr($this);
       }
   }

