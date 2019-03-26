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
 * Complete the vowelsAndConsonants function.
 * Print your output using 'console.log()'.
 */
function vowelsAndConsonants(s) {
  let str = s.split('');
  let vovels = [];
  let nonVovels = [];

  str.forEach((letter) => {
    if (['a', 'e', 'i', 'o', 'u'].indexOf(letter) >= 0) {
      vovels.push(letter);
    } else {
      nonVovels.push(letter);
    }
  });

  vovels.forEach((letter) => {
    console.log(letter);
  });

  nonVovels.forEach((letter) => {
    console.log(letter);
  });
}

function main() {
  const s = readLine();

  vowelsAndConsonants(s);
}