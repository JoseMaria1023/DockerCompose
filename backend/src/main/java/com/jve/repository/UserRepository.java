package com.jve.repository;

import org.springframework.data.jpa.repository.JpaRepository;

import com.jve.entity.User;

public interface UserRepository extends JpaRepository<User, Long> {
    
}
