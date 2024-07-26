<x-app-layout>
    <div>
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
            <div class="container mx-auto px-6 py-8">


                <h3 class="text-gray-700 text-3xl font-medium">Welcome : {{ auth()->user()->name }}</h3>

                <p>Role : <b>
                        @foreach(auth()->user()->roles as $role)
                        {{ $role->name }}
                        @endforeach
                    </b> </p>
              
            <div class="card-pro">
                <div class="card-header">
                    Product
                </div>
                <div class="card-body">
                    <table>
                        <thead>
                            <tr>Pick Up location</tr>
                            <tr>Arrival Location</tr>
                            <tr>Type Of Product</tr>
                            <tr>Weight</tr>
                            <tr>More</tr>
                        </thead>
                        <tbody>
                            <tr></tr>
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
    </main>
    </div>
</x-app-layout>


<style>
    .main-container {
        grid-area: main;
        overflow-y: auto;
        padding: 20px 20px;
    }

    .main-title {
        display: flex;
        justify-content: space-between;
    }

    .main-cards {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        gap: 20px;
        margin: 20px 0;
    }

    .card {
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        padding: 25px;
        color: rgb(255, 255, 255);
        border-radius: 30px;
        box-shadow: 0 6px 7px -4px rgba(0, 0, 0, 0.2);
    }

    .card:first-child {
        background-color: rgb(213, 0, 0);
    }

    .card:nth-child(2) {
        background-color: rgb(46, 125, 50);
    }

    .card:nth-child(3) {
        background-color: rgb(255, 111, 0);
    }

    .card:nth-child(4) {
        background-color: rgb(29, 38, 154);
    }

    .card-inner {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .card-inner>span {
        font-size: 50px;
    }

    .products {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }

    .product-card {
        height: 350px;
        background-color: rgb(255, 255, 255);
        padding: 25px;
        border-radius: 30px;
        box-shadow: 0 6px 7px -4px rgba(0, 0, 0, 0.2);
    }

    .product-description {
        padding-top: 50px;
    }

    .product-button {
        background-color: rgb(29, 38, 154);
        color: rgb(255, 255, 255);
        padding: 20px;
        border-radius: 30px;
    }

    .product-button>.material-icons-outlined {
        font-size: 50px;
    }

    .social-media {
        height: 350px;
        padding: 10px;
    }

    .product {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }

    .product-icon {
        color: rgb(255, 255, 255);
        width: 48px;
        height: 48px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 20px;
    }

    .product-icon>.bi {
        font-size: 25px;
    }
    /* ---------- MEDIA QUERIES ---------- */

    /* Medium <= 992px * */
    @media screen and (max-width: 992px) {
        .grid-container {
            grid-template-columns: 1fr;
            grid-template-rows: 0.2fr 3fr;
            grid-template-areas:
                'header'
                'main';
        }

        #sidebar {
            display: none;
        }

        .menu-icon {
            display: inline;
        }

        .sidebar-title>span {
            display: inline;
        }
    }

    /* Small <= 768px */
    @media screen and (max-width: 768px) {
        .main-cards {
            grid-template-columns: 1fr;
            gap: 10px;
            margin-bottom: 0;
        }

        .products {
            grid-template-columns: 1fr;
            margin-top: 30px;
        }
    }

    /* Extra Small <= 576px */
    @media screen and (max-width: 576px) {
        .header-left {
            display: none;
        }
    }
</style>