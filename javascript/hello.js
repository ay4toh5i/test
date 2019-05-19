'use strict';

const text = "Hello JavaScript!!";
console.log(text);

// "" と '' は一緒
// ``  => テンプレートリテラル
let num = 10;
let str = 'xxx';

console.log(`test ${num}, ${str}`);

const object = {
  key: "value"
};

console.log(object.key);
console.log(object["key"]);

const object2 = {
  "key": "value"
};

console.log(object2.key);
console.log(object2["key"]);

// NaN は Number型
console.log(`typeof NaN is ${typeof NaN}`); // => number
console.log(Number.isNaN(NaN)); // => true
console.log(Number.isNaN(10)); // => false

console.log(1 === 1); // => true
console.log(1 === "1"); // => false

const obj1 = { key: "value" };
const obj2 = { key: "value" };
// == は 同じデータ型を比較する場合は === と同じ動作
console.log(`obj1 == obj2  => ${obj1 == obj2}`); // => false
console.log(`obj1 === obj2 => ${obj1 === obj2}`); // => false

// falsyな値
// false
// undefined
// null
// 0
// NaN
// ""

let x; // undefined
if (!x) {
  console.log("x is falsy", x);
}

// 明示的な変換
String(1); // => "1"
String(true); // => "true"
String(null); // => "null"
String(undefined); // => "undefined"
String(Symbol("シンボル")); // => "Symbol("シンボル")

// +演算子は、文字列結合が優先される
// シンボルは、暗黙的型変換されない
console.log( 1 + "1");

try {
  console.log("string" + Symbol("symbol"));
} catch (error) {
  console.log(error);
}

const readlineSync = require('readline-sync');
const input = window.prompt("入力:");
const number = Number(input);
console.log(`input is ${typeof input}`);
console.log(`number is ${typeof number}`);
