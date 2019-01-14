function deleteGroup(group_id){
    axios.get('/api/deleteGroup', {
        params: {
            group_id: group_id
        }
    })
    .then(function (response) {  
        window.location.href = "/grupy_materialow";              
        console.log(response.data);
    })
    .catch(function (error) {
         console.log(error);
    }); 
} 