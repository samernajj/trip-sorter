# Trip Sorter

You are given a stack of boarding cards for various transportations that will take you from a point A to point B via several stops on the way. All of the boarding cards are out of order and you don't know where your journey starts, nor where it ends. Each boarding card contains information about seat assignment, and means of transportation (such as flight number, bus number etc).

Write an API that lets you sort this kind of list and present back a description of how to complete your journey.

For instance the API should be able to take an unordered set of boarding cards, provided in a format defined by you, and produce this list:

1. Take train 78A from Madrid to Barcelona. Sit in seat 45B.

2. Take the airport bus from Barcelona to Gerona Airport. No seat assignment.

3. From Gerona Airport, take flight SK455 to Stockholm. Gate 45B, seat 3A.Baggage drop at ticket counter 344.

4. From Stockholm, take flight SK22 to New York JFK. Gate 22, seat 7B.Baggage will we automatically transferred from your last leg.

5. You have arrived at your final destination.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

If you don't have composer, you can get it from [Composer](https://getcomposer.org/) - Dependency Management

### Installing

1- clone the project/reposiory on your machine
```
git clone https://github.com/samernajj/trip-sorter.git
```
2- go to the project
```
cd trip-sorter
```
3- composer install dependencies 
```
composer install
```
4- Run the project
```
php index.php
```

## Author

* **Samer Najjar** - [samernajj](https://github.com/samernajj)
