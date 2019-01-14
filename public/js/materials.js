function showMaterialsList(group_id){
    axios.get('/api/getMaterials', {
        params: {
            group_id: group_id
        }
    })
    .then(function (response) {                
        console.log(response.data);
        $("#material").html(response.data);
    })
    .catch(function (error) {
         console.log(error);
    }); 
}

function deleteMaterial(material_id){
    axios.get('/api/deleteMaterial', {
        params: {
            material_id: material_id
        }
    })
    .then(function (response) {  
        window.location.href = "/materialy";              
        console.log(response.data);
    })
    .catch(function (error) {
         console.log(error);
    }); 
}