<?php

namespace Cupidontech\MultiFaker\Contracts;

interface FakerGeneratorInterface
{
    public function first_name();
    public function last_name();
    public function gender();
    public function address();
    public function phone();
    public function email();
    public function date(string $startDate = '-30 years', string $endDate = 'now', string $format = 'Y-m-d');
    public function region();
    public function city(string $region);
    public function cities();
    public function coordinates();
    public function password();
    public function text(int $length);
    public function companyName();
    public function creditCardNumber();
    public function username();
    public function product();
    public function food();
}
