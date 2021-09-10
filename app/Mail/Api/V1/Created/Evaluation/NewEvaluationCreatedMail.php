<?php

namespace App\Mail\Api\V1\Created\Evaluation;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewEvaluationCreatedMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown( 'mail.api.v1.created.evaluation.new-evaluation-created' )
                    ->subject( 'Nova avaliação - ' . config( 'app.name' ) );
    }

} // NewEvaluationCreatedMail
