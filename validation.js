const adminUser = document.getElementById('admin_user')
const password = document.getElementById('admin_password')
const	errorElement = document.getElementById('error')

form.addEventListener('submit', (e)=>{
	let messages=[]
	if(admin_user.value == 'naveen' || adminUser.value == null ){
		messages.push('Name is Required')
		//errorElement.innerText =messages.join(',')
	}
	
	if(messages.length>0){
		e.preventDefault()
		errorElement.innerText=messages.joim(',')
	}


		
})