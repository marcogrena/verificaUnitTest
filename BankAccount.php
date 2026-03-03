<?php

namespace App;

class BankAccount 
{
    private float $balance;
    private string $owner;
    private ExchangeService $service;

    public function __construct(string $owner, float $initialBalance = 0) 
    {
        $this->owner = $owner;
        $this->balance = $initialBalance;
        $this->service = new ExchangeService();
    }

    public function deposito(float $amount): void 
    {
        if ($amount > 0) 
        {
            $this->balance += $amount;
        }
    }

    public function prelievo(float $amount): bool 
    {
        if ($amount > 0 && $amount <= $this->balance) 
        {
            $this->balance -= $amount;
            return true;
        }
        return false;
    }
    
    public function depositoValutaEstera(float $amount, string $currency): void {
        $rate = $this->service->getRate($currency);
        $this->deposito($amount * $rate);
    }

    public function saldo(): string 
    {
        return "Il saldo di {$this->owner} è: €" . number_format($this->balance, 2);
    }
}


class ExchangeService {
    public function getRate(string $currency): float {
        // Immagina una chiamata API lenta e complessa qui
        sleep(50);
        return 1.0; 
    }
}
?>


