<x-app-layout>
    <link rel="stylesheet" href="/css/style.css">
    <div style="background-color: #f0f0f0">
        <h1>Admin's Dashboard</h1>
    </div>


    <div>

        <form action="{{ url('/addcheckin') }}" method="POST">

            @csrf
            <div id="username">
                <input type="text" name="name" placeholder="Username" required="Name is Required">
            </div>
            <div id="username">
                <input type="email" name="email" placeholder="Enter your Email" required="Email is Required">
            </div>
            <div id="username">
                <input type="password" name="password" placeholder="Enter password" required="Required!!">
            </div>
            <div id="user">
                <input type="submit" placeholder="Submit" id="submit">
            </div>

        </form>
    </div>
</x-app-layout>