const data = [
    {
        "task_id":"T#01",
        "title":"Meeting with Akhilesh at 10:00AM",
        "description":"We will discuss about out upcoming CRM project.",
        "has_completed":false,
    },
    {
        "task_id":"T#02",
        "title":"Requirement Analysis with Team Lead",
        "description":"We will discuss about out upcoming CRM project requirement.",
        "has_completed":true,
    },
    {
        "task_id":"T#03",
        "title":"Lunch Hour",
        "description":"Take Healthy Lunch",
        "has_completed":false,
    }
];

generateTaskList();

const form = document.querySelector("#task_create_form");
form.addEventListener("submit",()=>{
    const title = document.querySelector("#title").value
    const description = document.querySelector("#description").value
    
    
    const inputDataJson = {
        "task_id":`T#${Date.now()}`,
        "title" : title,
        "description" : description,
        "has_completed":false
    }
    const validate = validateInputData(inputDataJson)

    if(!validate){
        alert("Check your input data.");
        return false;
    }
    data.push(inputDataJson)
    generateTaskList();
    document.querySelector("#clear_btn").click()
})

const chkBox = document.querySelectorAll(".complete_checkbox")

chkBox.forEach((el,key)=>{
    el.addEventListener("click",(event)=>{
        const clickedBoxElement = event.srcElement;
        if(clickedBoxElement.checked){
            const task_id = clickedBoxElement.getAttribute("data-task_id") || 0
            data.forEach((item,key)=>{
                if(item.task_id == task_id){
                    item.has_completed = true;
                }
            })
            refreshTaskList()
        }
    })
})