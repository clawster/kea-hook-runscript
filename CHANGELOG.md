# Changelog for kea-hook-runscript

## 1.3.0 (2019-11-02)

New features:

- Add support for DHCP option 60 (#12)

Fixes:

- Fix build against Kea 1.6 (#16)
- Fix build with older compilers

Misc:

- Licence code under the MPL

## 1.2.0 (2019-01-24)

- Allow to run the script asynchronously (by setting `wait=false`, see `README`)

## 1.1.0 (2017-10-22)

- Add lots of DHCPv6 variables: DHCPv6 should now be usable
- Add some more DHCPv4 variables, especially for leases
- Safety fixes: fix potential NULL pointer dereference, and unsafe string usage
- Makefile: use standard CXX variable instead of hard-coding g++

## 1.0.0 (2017-08-24)

- Initial release
