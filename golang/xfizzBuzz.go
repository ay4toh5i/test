package main

import (
  "fmt"
  "flag"
  "strconv"
  "strings"
)

func main() {

  flag.Parse()
  args := flag.Args()
  num, _ := strconv.Atoi(args[0])

  for i := 1; i <= num; i++ {
    if i%3 == 0 || strings.Contains( strconv.Itoa(i), "3" ) {
      fmt.Println("Fizz")
    } else {
        fmt.Println(i)
    }
  }
}
