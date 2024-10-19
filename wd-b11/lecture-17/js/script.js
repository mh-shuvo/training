
form.addEventListener("submit",(e)=>{
    const title = document.querySelector("#title").value || null;
    const description = document.querySelector("#description").value || null;
    const taskIndex = document.querySelector("#task_index").value || null

    const currentTaskNo = taskNo+1;

    var inputJsonData = {
        "task_id" : (Date.now()).toString(),
        "title" : title,
        "description" : description,
        "has_completed": false
    }

    const hasValid = validate(inputJsonData);

    if(!hasValid){
        alert("Check your input data")
        return false;
    }

    if(taskIndex != null && taskIndex>=0){
        //do update
        inputJsonData.task_id = data[taskIndex].task_id
        data[taskIndex] = inputJsonData

    }else{
        data.push(inputJsonData)

        taskNo = currentTaskNo;
    }

    

    updateLocalStorage();
    LoadTasks()
    initializeEventListener();
    resetForm()
})

const initializeEventListener = ()=>{
    document.querySelectorAll(".complete_checkbox").forEach((box,key)=>{
        box.addEventListener("click",(e)=>{
            const taskId = e.target.getAttribute("data-task-id")
            markAsComplete(taskId)
        })
    })

    document.querySelectorAll(".edit_btn").forEach((box,key)=>{
        box.addEventListener("click",(e)=>{
            const taskId = e.target.getAttribute("data-task-id")
            editTask(taskId)
        })
    })

    document.querySelectorAll(".delete_btn").forEach((box,key)=>{
        box.addEventListener("click",(e)=>{
            const taskId = e.target.getAttribute("data-task-id")
            deleteTask(taskId)
        })
    })
}


window.addEventListener("load",()=>{
    runSeeder();
    LoadTasks();
    initializeEventListener();
    showClock();
})



