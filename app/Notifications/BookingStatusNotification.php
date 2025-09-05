<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\Booking;

class BookingStatusNotification extends Notification
{
    use Queueable;

    protected $booking;
    protected $note;

    public function __construct($booking, $note = null)
    {
        $this->booking = $booking;
        $this->note = $note;
    }

    public function via($notifiable)
    {
        // bisa email + database
        return ['mail', 'database'];
    }

    public function toMail($notifiable)
    {
        $status = ucfirst($this->booking->status);

        return (new MailMessage)
            ->subject("Status Booking Ruangan: {$status}")
            ->greeting("Halo, {$notifiable->name}")
            ->line("Pengajuan booking untuk ruangan **{$this->booking->room->name}** pada tanggal {$this->booking->start_time->format('d M Y')} telah di-{$status}.")
            ->line($this->booking->note ? "Catatan dari admin: {$this->booking->note}" : '')
            ->action('Lihat Detail Booking', url(route('bookings.show', $this->booking->id)))
            ->line('Terima kasih telah menggunakan layanan kami!');
    }

    public function toDatabase($notifiable)
    {
        return [
            'booking_id' => $this->booking->id,
            'room'       => $this->booking->room->name,
            'status'     => $this->booking->status,
            'note'       => $this->booking->note,
            'date'       => $this->booking->start_time->format('d M Y'),
        ];
    }
}
