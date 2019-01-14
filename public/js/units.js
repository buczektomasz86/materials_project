function deleteUnit(unit_id){
    axios.get('/api/deleteUnit', {
        params: {
            unit_id: unit_id
        }
    })
    .then(function (response) {  
        window.location.href = "/jednostki_miary";              
        console.log(response.data);
    })
    .catch(function (error) {
         console.log(error);
    }); 
} 