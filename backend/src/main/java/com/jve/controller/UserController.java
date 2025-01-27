package com.jve.controller;

import java.util.List;

import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import com.jve.entity.User;
import com.jve.repository.UserRepository;

@RestController
@RequestMapping("/api/User")
public class UserController {

    private final UserRepository repository;

    public UserController(UserRepository repository) {
        this.repository = repository;
    }

    @GetMapping()
    public List<User> findAll() {
        return repository.findAll();
    }
}
