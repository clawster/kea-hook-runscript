<?php
declare(strict_types=1);

namespace Kea\Script;

/**
 *
 * https://github.com/zorun/kea-hook-runscript
 *
 *
 */

class Ipv4
{


    /** @var ?string  Type of DHCP message  dhcp/dhcp4.h */
    var $KEA_QUERY4_TYPE = null;
    /** @var ?string  Interface on which query was received */
    var $KEA_QUERY4_INTERFACE = null;
    /** @var ?int Index of the interface on which query was received */
    var $KEA_QUERY4_IFINDEX = null;
    /** @var ?string  Hardware address of the client (its MAC address) */
    var $KEA_QUERY4_HWADDR = null;
    /** @var ?int Type of hardware address  dhcp/dhcp4.h */
    var $KEA_QUERY4_HWADDR_TYPE = null;
    /** @var ?int How this MAC address was obtained dhcp/hwaddr.h */
    var $KEA_QUERY4_HWADDR_SOURCE  = null;
    /** @var ?bool  Whether query was relayed dhcp/pkt4.h */
    var $KEA_QUERY4_RELAYED = null;
    /** @var ?int Number of relay agents traversed */
    var $KEA_QUERY4_RELAY_HOPS = null;
    /** @var ?string  Option 60 - vendor id */
    var $KEA_QUERY4_OPTION60 = null;
    /** @var ?string  Hex-Encoded representation of OPTION82 Sub1 */
    var $KEA_QUERY4_OPTION82_SUB1=null;
    /** @var ?string  Hex-Encoded representation of OPTION82 Sub2 */
    var $KEA_QUERY4_OPTION82_SUB2=null;
    /** @var ?string  Client IP address dhcp/pkt4.h */
    var $KEA_QUERY4_CIADDR = null;
    /** @var ?string  Server IP address dhcp/pkt4.h */
    var $KEA_QUERY4_SIADDR = null;
    /** @var ?string  Your IP address dhcp/pkt4.h */
    var $KEA_QUERY4_YIADDR = null;
    /** @var ?string  Gateway IP address (inserted by DHCP relay) dhcp/pkt4.h */
    var $KEA_QUERY4_GIADDR = null;

    /** @var ?string  Type of DHCP message  dhcp/dhcp4.h */
    var $KEA_RESPONSE4_TYPE = null;
    /** @var ?string  Interface on which response is being sent */
    var $KEA_RESPONSE4_INTERFACE = null;
    /** @var ?int Index of the interface on which response is being sent */
    var $KEA_RESPONSE4_IFINDEX = null;
    /** @var ?string  Hardware address of the client (its MAC address) */
    var $KEA_RESPONSE4_HWADDR = null;
    /** @var ?int Type of hardware address  dhcp/dhcp4.h */
    var $KEA_RESPONSE4_HWADDR_TYPE = null;
    /** @var ?int How this MAC address was obtained dhcp/hwaddr.h */
    var $KEA_RESPONSE4_HWADDR_SOURCE = null;
    /** @var ?bool  Whether response is relayed dhcp/pkt4.h */
    var $KEA_RESPONSE4_RELAYED = null;
    /** @var ?int Number of relay agents traversed */
    var $KEA_RESPONSE4_RELAY_HOPS = null;
    /** @var ?string  Client IP address dhcp/pkt4.h */
    var $KEA_RESPONSE4_CIADDR = null;
    /** @var ?string  Server IP address dhcp/pkt4.h */
    var $KEA_RESPONSE4_SIADDR = null;
    /** @var ?string  Your IP address dhcp/pkt4.h */
    var $KEA_RESPONSE4_YIADDR = null;
    /** @var ?string  Gateway IP address  dhcp/pkt4.h */
    var $KEA_RESPONSE4_GIADDR = null;
    /** @var ?string  Hex-Encoded representation of OPTION82 Sub1 */
    var $KEA_RESPONSE4_OPTION82_SUB1=null;
    /** @var ?string  Hex-Encoded representation of OPTION82 Sub2 */
    var $KEA_RESPONSE4_OPTION82_SUB2=null;


    /** @var ?IPv4  IP prefix of the subnet (without prefix length) */
    var $KEA_SUBNET4_PREFIX = null;
    /** @var ?int Prefix length of the subnet (0 to 32) */
    var $KEA_SUBNET4_PREFIXLEN = null;
    /** @var ?string  KEA_SUBNET4_PREFIX/KEA_SUBNET4_PREFIXLEN */
    var $KEA_SUBNET4 = null;
    /** @var ?IPv4  IPv4 address leased to client */
    var $KEA_LEASE4_ADDRESS = null;
    /** @var ?string  Type of lease, always equal to "V4" */
    var $KEA_LEASE4_TYPE = null;
    /** @var ?string  Hardware address of the client */
    var $KEA_LEASE4_HWADDR = null;
    /** @var ?string  Hostname associated to the client */
    var $KEA_LEASE4_HOSTNAME = null;
    /** @var ?string  Current state of the lease  dhcpsrv/lease.h */
    var $KEA_LEASE4_STATE = null;
    /** @var ?bool  Whether the lease is expired */
    var $KEA_LEASE4_IS_EXPIRED = null;
    /** @var ?int Unix timestamp of the last message received from the client dhcpsrv/lease.h */
    var $KEA_LEASE4_CLIENT_LAST_TRANSMISSION = null;
    /** @var ?int Valid lifetime of the lease, in seconds dhcpsrv/lease.h */
    var $KEA_LEASE4_VALID_LIFETIME = null;
    /** @var ?bool  Whether the lease should be removed from the lease database DHCPv4 hook API */
    var $KEA_REMOVE_LEASE = null;
    /** @var ?bool  Whether the query is a DISCOVER or a REQUEST  DHCPv4 hook API */
    var $KEA_FAKE_ALLOCATION = null;



    public function __construct()
    {
        $this->KEA_QUERY4_TYPE             = getenv("KEA_QUERY4_TYPE");
        $this->KEA_QUERY4_INTERFACE        = getenv("KEA_QUERY4_INTERFACE");
        $this->KEA_QUERY4_IFINDEX          = (int) getenv("KEA_QUERY4_IFINDEX");
        $this->KEA_QUERY4_HWADDR           = getenv("KEA_QUERY4_HWADDR");
        $this->KEA_QUERY4_HWADDR_TYPE      = (int) getenv("KEA_QUERY4_HWADDR_TYPE");
        $this->KEA_QUERY4_HWADDR_SOURCE    = getenv("KEA_QUERY4_HWADDR_SOURCE");
        $this->KEA_QUERY4_RELAYED          = (bool) getenv("KEA_QUERY4_RELAYED");
        $this->KEA_QUERY4_RELAY_HOPS       = (int) getenv("KEA_QUERY4_RELAY_HOPS");
        $this->KEA_QUERY4_OPTION60         = getenv("KEA_QUERY4_OPTION60");
        $this->KEA_QUERY4_CIADDR           = getenv("KEA_QUERY4_CIADDR");
        $this->KEA_QUERY4_SIADDR           = getenv("KEA_QUERY4_SIADDR");
        $this->KEA_QUERY4_YIADDR           = getenv("KEA_QUERY4_YIADDR");
        $this->KEA_QUERY4_GIADDR           = getenv("KEA_QUERY4_GIADDR");
        $this->KEA_QUERY4_OPTION82_SUB1    = getenv("KEA_QUERY4_OPTION82_SUB1");
        $this->KEA_QUERY4_OPTION82_SUB2    = getenv("KEA_QUERY4_OPTION82_SUB2");

        $this->KEA_RESPONSE4_TYPE          = getenv("KEA_RESPONSE4_TYPE");
        $this->KEA_RESPONSE4_INTERFACE     = getenv("KEA_RESPONSE4_INTERFACE");
        $this->KEA_RESPONSE4_IFINDEX       = (int) getenv("KEA_RESPONSE4_IFINDEX");
        $this->KEA_RESPONSE4_HWADDR        = getenv("KEA_RESPONSE4_HWADDR");
        $this->KEA_RESPONSE4_HWADDR_TYPE   = (int)  getenv("KEA_RESPONSE4_HWADDR_TYPE");
        $this->KEA_RESPONSE4_HWADDR_SOURCE = (int)  getenv("KEA_RESPONSE4_HWADDR_SOURCE");
        $this->KEA_RESPONSE4_RELAYED       = (bool) getenv("KEA_RESPONSE4_RELAYED");
        $this->KEA_RESPONSE4_RELAY_HOPS    = (int)  getenv("KEA_RESPONSE4_RELAY_HOPS");
        $this->KEA_RESPONSE4_CIADDR        = getenv("KEA_RESPONSE4_CIADDR");
        $this->KEA_RESPONSE4_SIADDR        = getenv("KEA_RESPONSE4_SIADDR");
        $this->KEA_RESPONSE4_YIADDR        = getenv("KEA_RESPONSE4_YIADDR");
        $this->KEA_RESPONSE4_GIADDR        = getenv("KEA_RESPONSE4_GIADDR");
        $this->KEA_RESPONSE4_OPTION82_SUB1 = getenv("KEA_RESPONSE4_OPTION82_SUB1");
        $this->KEA_RESPONSE4_OPTION82_SUB2 = getenv("KEA_RESPONSE4_OPTION82_SUB2");

        $this->KEA_SUBNET4_PREFIX          = getenv("KEA_SUBNET4_PREFIX");
        $this->KEA_SUBNET4_PREFIXLEN       = (int) getenv("KEA_SUBNET4_PREFIXLEN");
        $this->KEA_SUBNET4                 = getenv("KEA_SUBNET4");

        $this->KEA_LEASE4_ADDRESS          = getenv("KEA_LEASE4_ADDRESS");
        $this->KEA_LEASE4_TYPE             = getenv("KEA_LEASE4_TYPE");
        $this->KEA_LEASE4_HWADDR           = getenv("KEA_LEASE4_HWADDR");
        $this->KEA_LEASE4_HOSTNAME         = getenv("KEA_LEASE4_HOSTNAME");
        $this->KEA_LEASE4_STATE            = getenv("KEA_LEASE4_STATE");
        $this->KEA_LEASE4_IS_EXPIRED       = (bool) getenv("KEA_LEASE4_IS_EXPIRED");
        $this->KEA_LEASE4_CLIENT_LAST_TRANSMISSION = (int) getenv("KEA_LEASE4_CLIENT_LAST_TRANSMISSION");
        $this->KEA_LEASE4_VALID_LIFETIME   = (int) getenv("KEA_LEASE4_VALID_LIFETIME");

        $this->KEA_REMOVE_LEASE            = (bool) getenv("KEA_REMOVE_LEASE");

        $this->KEA_FAKE_ALLOCATION         = (bool) getenv("KEA_FAKE_ALLOCATION");

    }

}

$kea = new \Kea\Script\Ipv4;
$file = "/tmp/php_hook.log";

file_put_contents(
    $file,
    json_encode($kea) . PHP_EOL,
    FILE_APPEND
);
