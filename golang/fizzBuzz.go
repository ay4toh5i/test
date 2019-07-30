package main

import (
  "fmt"
  "flag"
  "strconv"
)

func main() {

  flag.Parse()
  args := flag.Args()
  num, _ := strconv.Atoi(args[0])

  for i := 1; i <= num; i++ {
    switch {
      case i%3 ==0 && i%5 ==0:
        fmt.Println("FizzBuzz")
      case i%3 == 0:
        fmt.Println("Fizz")
      case i%5 == 0:
        fmt.Println("Buzz")
      default:
        fmt.Println(i)
    }
  }
}
