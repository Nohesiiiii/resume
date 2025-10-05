function greetUser() {
    const now = new Date();
    const hour = now.getHours();
    let greeting = "Hello";

    if(hour >= 5 && hour < 12){
        greeting = "Good morning!";
    } else if(hour >= 12 && hour < 18){
        greeting = "Good afternoon!";
    } else {
        greeting = "Good evening!";
    }

    const greetEl = document.getElementById('greeting');
    if(greetEl){
        greetEl.textContent = greeting;
    }
}

greetUser();

