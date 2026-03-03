<?php
namespace App\Tests;

require_once "BankAccount.php";



use PHPUnit\Framework\TestCase;
use App\BankAccount;

class BankAccountTest extends TestCase 
{
     /**
      * Creando un nuovo conto con 100 euro, il bilancio dev'essere 100 euro
      */
    public function testInitialBalance() 
    {
      $conto=new BankAccount("Marco",100);
      $this->assertSame($conto->getBalance(),"Il saldo di Marco è: €100.00");
    }

    /**
      * Aggiungendo 50 euro a un conto che ne ha 100, il bilancio dev'essere 150 euro
      */
    public function testDepositIncreasesBalance() 
    {

    }

    /**
      * Togliendo 100 euro da un conto che ne ha 50, il prelievo deve fallire
      */
    public function testWithdrawFailsWithInsufficientFunds() 
    {

    }
}