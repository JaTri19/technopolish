<?php

namespace App\Mail;

use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class IzinTerbitMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */

    public $perizinan;

    public function __construct($perizinan)
    {
        $this->perizinan = $perizinan;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Surat Izin Terbit',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.izinTerbit',
            with: [
                'perizinan' => $this->perizinan,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        $options = new Options(); // Create Dompdf options
        $options->set('isHtml5ParserEnabled', true);

        $pendirian = $this->perizinan;
        $dompdf = new Dompdf($options); // Pass options to Dompdf
        $view = view('emails.izinTerbitPdf', compact('pendirian'));
        $dompdf->loadHtml($view->render()); // Use render() to get the HTML content
        $dompdf->setPaper('A4', 'portrait'); // Set paper size and orientation
        $dompdf->render();
        $output = $dompdf->output();

        return [
            'attachment' => $output,
            'filename' => 'surat_izin_terbit.pdf',
            'mime' => 'application/pdf', // Set MIME type for the attachment
        ];
    }
}
