'use strict';

process.stdin.resume();
process.stdin.setEncoding('utf-8');

let inputString = '';
let currentLine = 0;

process.stdin.on('data', inputStdin => {
  inputString += inputStdin;
});

process.stdin.on('end', _ => {
  inputString = inputString.trim().split('\n').map(string => {
    return string.trim();
  });

  main();
});

function readLine() {
  return inputString[currentLine++];
}

/*
 * Modify and return the array so that all even elements are doubled and all odd elements are tripled.
 *
 * Parameter(s):
 * nums: An array of numbers.
 */
function modifyArray(nums) {
  let result = [];
  nums.forEach((item) => {
    if (item % 2 === 0) {
      result.push(item * 2);
    } else {
      result.push(item * 3);
    }
  });

  return result;
}

function main() {
  const n = +(readLine());
  const a = readLine().split(' ').map(Number);

  console.log(modifyArray(a).toString().split(',').join(' '));
}