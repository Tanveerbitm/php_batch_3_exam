<?php include ("header.php")?>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            String Word Count System
                        </div>
                        <div class="card-body">
                            <form action="action.php" method="POST">
                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label" >Input String</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="string" required value="<?php echo isset($result['string'])? $result['string'] :''; ?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label">Total Word</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" readonly value="<?php echo isset($result['word'])?$result['word']:'0'; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label">Total Character</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" readonly value="<?php echo isset($result['character'])? $result['character'] :'0'; ?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-dark" value="submit" name="btn">
                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

<?php include ("footer.php")?>