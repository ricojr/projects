
//will export date data to app.js 


exports.getDate = function () {
let today = new Date();
    
    let options = {
        weekday: "long",
        day: "numeric",
        month: "long"
    };

    return today.toLocaleDateString("en-EU", options);

    

}

exports.getDay = function () {
    let today = new Date();
        
        let options = {
            weekday: "long",
            year: "numeric",
            hour: "numeric"
            
        };
    
        return today.toLocaleDateString("en-EU", options);
    
       
    
    }

console.log(module.exports);