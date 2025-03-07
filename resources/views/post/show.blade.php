<x-Head>
    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
        <div class="row">
            <div class="col-md-12 ">
                <form action="{{ route('post.store') }}" class="bg-light p-4 p-md-5 contact-form"
                    enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <input type="text" name="text" class="form-control" placeholder="Text">
                    </div>
                    <div class="form-group">
                        <input type="file" name="file" class="form-control" placeholder="File">
                    </div>
                    <div class="form-group ">
                        <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5 col-md-12">
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-Head>
