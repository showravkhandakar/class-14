<x-layout title="Normal Form">  
    <hgroup>
    <h1 id="hgroup-example">This is Simple Form</h1>
    <p>The 1<sup>st</sup> layer is the most shallow section of the Abyss, right below the town of Orth.</p>
    </hgroup>

    <form method="post" action="{{ route('form.post') }}" style="background-color: #f8f8f8;">

        @csrf
        <label>Name</label>
        <input type="text" name="name" style="background-color: #cecece;">
        <label>Email</label>
        <input type="email" name="email" style="background-color: #cecece;">        
        <label>Password</label>
        <input type="password" name="password" style="background-color: #cecece;">
        <button  type="submit" style="background-color: #0ce0b8;"> <b>SUBMIT</b> </button>
    </form>


</x-layout>