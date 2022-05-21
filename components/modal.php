<style>
    .modal {
        display: block;
    }

    .modal.mymodal {
        transform: scale(0);
        opacity: 0;
        transition: all .5s ease-in-out;
        /* display: none; */
    }

    .modal.mymodal.modalopen {
        display: block;
        transition: all .5s ease-in-out;
        opacity: 1;
        transform: scale(1);
    }

    .btn-close {
        transition: all .5s ease-in-out;
    }

    .btn-close:hover {
        border: 1px solid #000;
    }

    .btn-close:focus {
        box-shadow: none;
    }

    .modal-content {
        background-color: rgba(0,0,0,0.63);
        backdrop-filter: blur(10px);
        border-radius: 1.5rem;
        border: none;
    }

    .modal-header {
        border-bottom: none;
    }
    .modal-body{
        margin-bottom: 2rem;
        padding: 0 1rem;
    }
    .modal-body p{
        font-size: 1.5rem;
        text-align: center;
    }
    .modal-body h1{
        text-align: center;
        font-size: 1.5rem;
    }
</style>
<!-- Modal -->
<div class="modal mymodal" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <!-- <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5> -->
                <button type="button" class="btn-close close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h1></h1>
                <p> Become an esteemed partner of one of the 10 exclusive <span>FTV House Franchises</span> in your very own city.</p>
            </div>
        </div>
    </div>
</div>


<script>
    let closeModal = document.querySelector(".close");
    let exampleModal = document.getElementById("staticBackdrop");
    setTimeout(() => {
        window.open(exampleModal.classList.add("modalopen"))
    }, 5000);

    closeModal.addEventListener("click", () => {
        exampleModal.classList.remove("modalopen");
    })
</script>