<!-- form -->
<div class="section" id="send-mail">
    <div class="container">
        <div class="row  justify-content-center">
            <div class="col-12 text-center align-self-center py-5">
                <div class="section pb-5 pt-5 pt-sm-2 text-center">

                    <div class="card-3d-wrap mx-auto">
                        <div class="card-3d-wrapper">

                            <div class="card-front">
                                <div class="center-wrap">
                                    <div class="section text-center">
                                        <h4 class="mb-4 pb-3">Send Your Mail</h4>
                                        <form method="post" action="/create">

                                            @csrf
                                            <div class="form-group">
                                                <input type="email" name="to" class="form-style"
                                                    placeholder="to :" id="mail-to" autocomplete="off" required>
                                                <i class="bi bi-envelope"></i>
                                            </div>
                                            <div class="form-group mt-2">
                                                <input type="text" name="subject" class="form-style"
                                                    placeholder="subject : " id="subject" autocomplete="off" required>
                                                <i class="bi bi-chat-square-quote"></i>
                                            </div>
                                            <div class="form-group mt-2">
                                                <textarea name="message" id="message" placeholder="Your Message " class="form-style" autocomplete="off" required></textarea>

                                                <i class="bi bi-chat-dots"></i>
                                            </div>
                                            <button type="submit" class="btn mt-4">Send</button>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
