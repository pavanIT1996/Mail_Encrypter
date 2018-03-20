// Encryption
function Encrypt() {
    plaintext = document.getElementById("plainText").value.toLowerCase();  
    if(plaintext.length < 1)
    { 
     	alert("please enter some plaintext"); 
     	return; 
    }    
    var shift = parseInt(document.getElementById("key").value);
    if(shift == -1)
    { 
     	alert("please select the key"); 
     	return; 
    } 
    ciphertext = "";   
    var re = /[a-z]/;
    for(i=0; i<plaintext.length; i++)
    { 
        if(re.test(plaintext.charAt(i))) ciphertext += String.fromCharCode((plaintext.charCodeAt(i) - 97 + shift)%26 + 97); 
        else ciphertext += plaintext.charAt(i); 
    } 
    document.getElementById("cipherText").value = ciphertext; 
} 
 
//Decryption 
function Decrypt() { 
    ciphertext = document.getElementById("cipherText").value.toLowerCase();  
    if(ciphertext.length < 1)
    { 
    	alert("please enter some ciphertext (letters only)"); 
    	return; 
    }    
    var shift = parseInt(document.getElementById("key").value);
    if(shift == -1)
    { 
     	alert("please select the key"); 
     	return; 
    } 
    plaintext = "";   
    var re = /[a-z]/;
    for(i=0; i<ciphertext.length; i++)
    { 
        if(re.test(ciphertext.charAt(i))) plaintext += String.fromCharCode((ciphertext.charCodeAt(i) - 97 + 26 - shift)%26 + 97); 
        else plaintext += ciphertext.charAt(i); 
    } 
    document.getElementById("plainText2").value = plaintext; 
} 


function Clear()
{

    document.getElementById('plainText').value = '';
    document.getElementById('cipherText').value = '';
    document.getElementById('plainText2').value = '';

}


