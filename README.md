# Calculator

Calculator application build during PHP Reboot `Making PHP code from Scratch' workshop.

This is the code we discussed in the videos. Videos of the series can be found at:

1. [Project setup and problem statement]() (Code branch `Chapter`).
1. [Symfony console component]() (Code branch `Chapter2`).

## Problem that we are solving in videos and example.

### Calculator module

We want to build a calculator that receives two numbers and does an operation.

We do not know which kind of operations we want to do yet, we will decide them in the future and this calculator may have really complex operations.

Current planned operations:

- Sum
- Rest
- Divide
- Multiply
- VAT (amount, vat rate)
- much others

Different teams will be adding in parallel operations to this calculator and it should be easy extendable using dependency injection and testable.

Build the skeleton (Architecture) of this calculator. You don't need to implement any of the operations.