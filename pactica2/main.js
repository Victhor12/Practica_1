$(document).ready(function(){
    
        let numeros="0123456789";
        let letras="abcdefghijklmnopqrstvwxyz";
        let todo = numeros + letras;
        const generarpasword = (longitud) => {
            let pasword = " ";
            for(let x = 0; x < longitud; x++){
                let aleatorio =Math.floor(Math.random() * todo.length);
                pasword += todo.charAt(aleatorio);
            }
            return pasword;
        }

        $("#rfc").click(function(){
        var nm= $("#nom").val();
        var apepa= $("#ape_pat").val();
        var apema= $("#ape_mat").val();
        var fetch= $("#fecha").val();
        var nom=nm.substr(0, 2);
        var apep=apepa.substr(0, 2);
        var apem=apema.substr(0, 2);
        var ano=fetch.substr(2, 2);
        var mes=fetch.substr(5, 2);
        var dia=fetch.substr(8, 2);
        var rfc= nom + apep + apem + ano + mes + dia + generarpasword(3);

        $("#rfcgen").val(rfc);
    });
        $("#id_us").click(function(){
            var id = document.getElementById("busus").value;
            $.ajax({
                type:"GET",
                url:"https://jsonplaceholder.typicode.com/users/"+ id,
                dataType:"json",
                success:function(data){
                    var nombre = "" + data.name +"";
                    var email=  "" + data.email +"";
                    //$('#nombre').append(nombre);
                   // $('#email').append(email);
                    $('#nomb').val(nombre);
                    $('#email').val(email);
                    
                }
            });
        });
      
        
});

/*
        console.log(generarpasword(10));
        console.log(dia)
        console.log(mes)
        console.log(ano) 
        console.log(nom1)
        console.log(nom)
        console.log(nm)
        console.log(apepa)
        console.log(apema)
        console.log(fetch)
        <input type="text" id="nombre" readonly>
        <input type="email" id="email" readonly>
        */