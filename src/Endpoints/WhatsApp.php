<?php

declare(strict_types=1);

namespace Infobip\Endpoints;

use Infobip\Resources\WhatsApp\WhatsAppAudioMessageResource;
use Infobip\Resources\WhatsApp\WhatsAppContactMessageResource;
use Infobip\Resources\WhatsApp\WhatsAppCreateTemplateResource;
use Infobip\Resources\WhatsApp\WhatsAppDeleteMediaResource;
use Infobip\Resources\WhatsApp\WhatsAppDocumentMessageResource;
use Infobip\Resources\WhatsApp\WhatsAppDownloadInboundMediaResource;
use Infobip\Resources\WhatsApp\WhatsAppGetMediaMetaDataResource;
use Infobip\Resources\WhatsApp\WhatsAppImageMessageResource;
use Infobip\Resources\WhatsApp\WhatsAppInteractiveButtonsMessageResource;
use Infobip\Resources\WhatsApp\WhatsAppInteractiveListMessageResource;
use Infobip\Resources\WhatsApp\WhatsAppInteractiveMultiProductMessageResource;
use Infobip\Resources\WhatsApp\WhatsAppInteractiveProductMessageResource;
use Infobip\Resources\WhatsApp\WhatsAppLocationMessageResource;
use Infobip\Resources\WhatsApp\WhatsAppMarkAsReadResource;
use Infobip\Resources\WhatsApp\WhatsAppStickerMessageResource;
use Infobip\Resources\WhatsApp\WhatsAppTemplateMessageResource;
use Infobip\Resources\WhatsApp\WhatsAppTemplatesResource;
use Infobip\Resources\WhatsApp\WhatsAppTextMessageResource;
use Infobip\Resources\WhatsApp\WhatsAppVideoMessageResource;

final class WhatsApp extends BaseEndpoint
{
    /**
     * @link https://www.infobip.com/docs/api#channels/whatsapp/send-whatsapp-template-message
     */
    public function sendWhatsAppTemplateMessage(WhatsAppTemplateMessageResource $resource): array
    {
        return $this->client->post('whatsapp/1/message/template', $resource->payload());
    }

    /**
     * @link https://www.infobip.com/docs/api#channels/whatsapp/send-whatsapp-text-message
     */
    public function sendWhatsAppTextMessage(WhatsAppTextMessageResource $resource): array
    {
        return $this->client->post('whatsapp/1/message/text', $resource->payload());
    }

    /**
     * @link https://www.infobip.com/docs/api#channels/whatsapp/send-whatsapp-document-message
     */
    public function sendWhatsAppDocumentMessage(WhatsAppDocumentMessageResource $resource): array
    {
        return $this->client->post('whatsapp/1/message/document', $resource->payload());
    }

    /**
     * @link https://www.infobip.com/docs/api#channels/whatsapp/send-whatsapp-image-message
     */
    public function sendWhatsAppImageMessage(WhatsAppImageMessageResource $resource): array
    {
        return $this->client->post('whatsapp/1/message/image', $resource->payload());
    }

    /**
     * @link https://www.infobip.com/docs/api#channels/whatsapp/send-whatsapp-audio-message
     */
    public function sendWhatsAppAudioMessage(WhatsAppAudioMessageResource $resource): array
    {
        return $this->client->post('whatsapp/1/message/audio', $resource->payload());
    }

    /**
     * @link https://www.infobip.com/docs/api#channels/whatsapp/send-whatsapp-video-message
     */
    public function sendWhatsAppVideoMessage(WhatsAppVideoMessageResource $resource): array
    {
        return $this->client->post('whatsapp/1/message/video', $resource->payload());
    }

    /**
     * @link https://www.infobip.com/docs/api#channels/whatsapp/send-whatsapp-sticker-message
     */
    public function sendWhatsAppStickerMessage(WhatsAppStickerMessageResource $resource): array
    {
        return $this->client->post('whatsapp/1/message/sticker', $resource->payload());
    }

    /**
     * @link https://www.infobip.com/docs/api#channels/whatsapp/send-whatsapp-location-message
     */
    public function sendWhatsAppLocationMessage(WhatsAppLocationMessageResource $resource): array
    {
        return $this->client->post('whatsapp/1/message/location', $resource->payload());
    }

    /**
     * @link https://www.infobip.com/docs/api#channels/whatsapp/send-whatsapp-contact-message
     */
    public function sendWhatsAppContactMessage(WhatsAppContactMessageResource $resource): array
    {
        return $this->client->post('whatsapp/1/message/contact', $resource->payload());
    }

    /**
     * @link https://www.infobip.com/docs/api#channels/whatsapp/send-whatsapp-interactive-list-message
     */
    public function sendWhatsAppInteractiveListMessage(WhatsAppInteractiveListMessageResource $resource): array
    {
        return $this->client->post('whatsapp/1/message/interactive/list', $resource->payload());
    }

    /**
     * @link https://www.infobip.com/docs/api#channels/whatsapp/send-whatsapp-interactive-product-message
     */
    public function sendWhatsAppInteractiveProductMessage(WhatsAppInteractiveProductMessageResource $resource): array
    {
        return $this->client->post('whatsapp/1/message/interactive/product', $resource->payload());
    }

    /**
     * @link https://www.infobip.com/docs/api#channels/whatsapp/send-whatsapp-interactive-multi-product-message
     */
    public function sendWhatsAppInteractiveMultiProductMessage(WhatsAppInteractiveMultiProductMessageResource $resource): array
    {
        return $this->client->post('whatsapp/1/message/interactive/multi-product', $resource->payload());
    }

    /**
     * @link https://www.infobip.com/docs/api#channels/whatsapp/send-whatsapp-interactive-buttons-message
     */
    public function sendWhatsAppInteractiveButtonsMessage(WhatsAppInteractiveButtonsMessageResource $resource): array
    {
        return $this->client->post('whatsapp/1/message/interactive/buttons', $resource->payload());
    }

    /**
     * @link https://www.infobip.com/docs/api#channels/whatsapp/download-whatsapp-inbound-media
     */
    public function downloadWhatsAppInboundMedia(WhatsAppDownloadInboundMediaResource $resource): array
    {
        $endpoint = sprintf(
            'whatsapp/1/senders/%s/media/%s',
            $resource->getSender(),
            $resource->getMediaId()
        );

        return $this->client->get($endpoint);
    }

    /**
     * @link https://www.infobip.com/docs/api#channels/whatsapp/get-whatsapp-media-metadata
     */
    public function getWhatsAppMediaMetaData(WhatsAppGetMediaMetaDataResource $resource): array
    {
        $endpoint = sprintf(
            'whatsapp/1/senders/%s/media/%s',
            $resource->getSender(),
            $resource->getMediaId()
        );

        return $this->client->head($endpoint);
    }

    /**
     * @link https://www.infobip.com/docs/api#channels/whatsapp/mark-whatsapp-message-as-read
     */
    public function markWhatsAppMessageAsRead(WhatsAppMarkAsReadResource $resource): array
    {
        $endpoint = sprintf(
            'whatsapp/1/senders/%s/message/%s',
            $resource->getSender(),
            $resource->getMessageId()
        );

        return $this->client->post($endpoint);
    }

    /**
     * @link https://www.infobip.com/docs/api#channels/whatsapp/get-whatsapp-templates
     */
    public function getWhatsAppTemplates(WhatsAppTemplatesResource $resource): array
    {
        $endpoint = sprintf(
            'whatsapp/1/senders/%s/templates',
            $resource->getSender()
        );

        return $this->client->get($endpoint);
    }

    /**
     * @link https://www.infobip.com/docs/api#channels/whatsapp/create-whatsapp-template
     */
    public function createWhatsAppTemplate(WhatsAppCreateTemplateResource $resource): array
    {
        $endpoint = sprintf(
            'whatsapp/1/senders/%s/templates',
            $resource->getSender()
        );

        return $this->client->post($endpoint, $resource->payload());
    }

    /**
     * @link https://www.infobip.com/docs/api#channels/whatsapp/delete-whatsapp-media
     */
    public function deleteWhatsAppMedia(WhatsAppDeleteMediaResource $resource): array
    {
        $endpoint = sprintf(
            'whatsapp/1/senders/%s/media',
            $resource->getSender()
        );

        return $this->client->delete($endpoint, $resource->payload());
    }
}
