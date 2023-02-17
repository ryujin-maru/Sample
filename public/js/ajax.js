const btn = document.getElementById('ajax_show');


btn.addEventListener('click',() => {
    const postData = new FormData;
    postData.set('id',document.getElementById('id_number').value);

    fetch('ajax/show_all',{
        method: 'POST',
        headers: {'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content},
        body: postData
    })
    .then(response => response.json())
    .then(res => {
        document.getElementById('show').textContent = res;
    })
    .catch(error => {
        console.log(error);
    })
})