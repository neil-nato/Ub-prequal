 module.exports = {
 // check if each property in the obj is empty
     checkIfEmpty: (obj) => {
         let isEmpty = 0;

         for(var prop in obj) {
             let item = obj[prop];

             if(_.isNumber(item)) {
                 isEmpty += item == 0 ? 0 : 1;
             } else {
                 isEmpty += _.isEmpty(item) ? 0 : 1;
             }
         }

         return isEmpty != Object.keys(obj).length;
     },
 };
