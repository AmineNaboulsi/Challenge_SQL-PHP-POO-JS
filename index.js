let txt = "Youcode is a great place to learn programming!";

function getWordBigestLength(word) {
    return word.split(' ').reduce((acc, word) => {
        if(acc.count < word.length) {
            acc.count = word.length
            acc.word = word
        }
        return acc ;
    } , {
        count: 0 ,
        word: ""
    }
);
}

// console.log(getWordBigestLength(txt));

const users = [
    { name: "Yasmine", age: 22, hobbies: ["music", "chess"] },
    { name: "Khalid", age: 17, hobbies: ["football", "video games"] },
    { name: "Lina", age: 30, hobbies: ["reading"] },
];

// Trier les utilisateurs par âge croissant


  
//Batal u need at least node v20 > for teh Object.groupBy method
function groupByAge(users){
    return Object.groupBy(users , user => {
        user.hobbies = JSON.stringify(user.hobbies);
        return user.age;
    } )
}

console.log(groupByAge(users));




https://github.com/AmineNaboulsi/Challenge_SQL-PHP-POO-JS.git