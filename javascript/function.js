// デフォルト引数
function addPrefix(text, prefix = "default:") {
  return prefix + text;
}

console.log(addPrefix("hoge"));
console.log(addPrefix("hoge", "fuga:"));

let num;
// numがfalsyなら10を代入
num = num || 10;
console.log(num);

// 可変長引数
console.log(Math.max(1, 5, 2, 10, 3));

function fn(...args) {
  console.log("rest parameters");
  console.log(args[0]);
  console.log(args[1]);
}
fn(1,2);

// function printUserId(user) {
//   console.log(user.id);
// }
// 
// const user = {
//   id: 42
// };

// 分割代入
function printUserId({ id }) {
  console.log(id);
}

const user = {
  id: 34
};
printUserId(user);

function print([first, second]) {
    console.log(first); // => 1
    console.log(second); // => 2
}
const array = [1, 2];
print(array);

// arrow function
console.log("arrow function");
[1, 2, 3].forEach( x => console.log(x) );
