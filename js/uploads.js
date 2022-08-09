//Define processing url
const url = 'http://localhost/hims/actions/uploads/process.php';

//Define processing form
const form = document.querySelector('form');

//Listen for form submit
form.addEventListener('submit', e => {
    e.preventDefault() //preventing default action from firing


    //Gathering the files with the .files property
    const files = document.querySelector('[type=file]').files;

    //Beguinning a new FormData interface
    const formdata = new FormData();
    console.log(files); // printing the file in the console just for debug purpose

    //  for each file that has been submitted, we append it in the files[] array
    for (let i = 0; i < files.length; i++) {
        let file = files[i]

        formdata.append('files[]', file)
    }

    // files.forEach((file) => {
    //     formdata.append('files[]', file);
    // });
    console.log(files[0]['name']);//printing the filename in the console for debug purpose

    //Using Fetch API to post the data to the URL we specified.Printing  the response in the console 
    fetch(url, {
        method: 'post',
        body: formdata

    }).then(response => {
        console.log('ok');
        console.log(response);
    })

    document.getElementById('hero').setAttribute('style', `background: url('uploads/hero/${files[0]['name']}') top center`);
});

