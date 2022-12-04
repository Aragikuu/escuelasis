const Form = document.querySelector('#formm');

Form.addEventListener('submit', (e) => {
    e.preventDefault();
    const correoo = document.querySelector('#correo').value;
    const Contra = document.querySelector('#contra').value;

    auth
    .createUserWithEmailAndPassword(correoo, Contra)
    .then(userCredential => {

        Form.reset();

        console.log('siuuuuuu')

    })


})