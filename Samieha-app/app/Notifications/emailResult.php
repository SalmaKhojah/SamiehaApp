<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;


class emailResult extends Notification
{
    use Queueable;

    public $data;


    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this -> data = $data;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
        ->subject(' تقرير جلسة لـ'.$this->data['p_name'])
        ->greeting('مرحبا الاختصاصيـ/ة '.$notifiable->name)


                    ->line('إليك ملخص جلسة رقم '.$this->data['session_id'].'  ومحاولة رقم '.$this->data['trial_id'].'  للمريض '.$this->data['p_name'])
                    ->line(' مجموع الكلمات: '.$this->data['wordsTotal'])
                    ->line('عدد الكلمات الصحيحة : '.$this->data['correct'])
                    ->line('عدد الكلمات الصحيحة : '.$this->data['incorrect'])

                    


                    ->action('الدخول إلى موقع سميها', url('http://127.0.0.1:8000/'));

    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
