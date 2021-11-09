// const updateButton = document.querySelector('#update-button')
// updateButton.addEventListener('click', _ => {
//   // Send PUT Request here
//   fetch('/', {
//     method: 'put',
//     headers: { 'Content-Type': 'application/json' },
//     body: JSON.stringify({
//       username: 'tunthgcc19001',
//       password: '123456777'
//     })
//   })
// })

// const deleteButton = document.querySelector('#delete-button')
// deleteButton.addEventListener('click', _ => {
//     fetch('_id', {
//       method: 'delete',
//       headers: { 'Content-Type': 'application/json' },
//       body: JSON.stringify({
//         _id: '_id'
//       })
//     })
//       .then(res => {
//         if (res.ok) return res.json()
//       })
//       .then(data => {
//         window.location.reload()
//       })
//   })