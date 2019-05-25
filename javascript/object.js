// `object`を浅く複製したオブジェクトを返す
const shallowClone = (object) => {
    return Object.assign({}, object);
};
const object = { a: "a" };
const cloneObject = shallowClone(object);
console.log(cloneObject); // => { a: "a" }
// オブジェクトを複製しているので、異なるオブジェクトとなる
console.log(object === cloneObject); // => false

const obj = {
  num: 0,
  add: function(){
    console.log(this.num);
    ++this.num;
    console.log(this.num);
  }
};

obj.add();
